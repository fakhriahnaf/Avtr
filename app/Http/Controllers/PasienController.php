<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePasienRequest;
use App\Http\Requests\UpdatePasienRequest;
use App\Repositories\PasienRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PasienController extends AppBaseController
{
    /** @var  PasienRepository */
    private $pasienRepository;

    public function __construct(PasienRepository $pasienRepo)
    {
        $this->pasienRepository = $pasienRepo;
    }

    /**
     * Display a listing of the Pasien.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pasienRepository->pushCriteria(new RequestCriteria($request));
        $pasiens = $this->pasienRepository->all();

        return view('pasiens.index')
            ->with('pasiens', $pasiens);
    }

    /**
     * Show the form for creating a new Pasien.
     *
     * @return Response
     */
    public function create()
    {
        return view('pasiens.create');
    }

    /**
     * Store a newly created Pasien in storage.
     *
     * @param CreatePasienRequest $request
     *
     * @return Response
     */
    public function store(CreatePasienRequest $request)
    {
        $input = $request->all();

        $pasien = $this->pasienRepository->create($input);

        Flash::success('Pasien saved successfully.');

        return redirect(route('pasiens.index'));
    }

    /**
     * Display the specified Pasien.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pasien = $this->pasienRepository->findWithoutFail($id);

        if (empty($pasien)) {
            Flash::error('Pasien not found');

            return redirect(route('pasiens.index'));
        }

        return view('pasiens.show')->with('pasien', $pasien);
    }

    /**
     * Show the form for editing the specified Pasien.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pasien = $this->pasienRepository->findWithoutFail($id);

        if (empty($pasien)) {
            Flash::error('Pasien not found');

            return redirect(route('pasiens.index'));
        }

        return view('pasiens.edit')->with('pasien', $pasien);
    }

    /**
     * Update the specified Pasien in storage.
     *
     * @param  int              $id
     * @param UpdatePasienRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePasienRequest $request)
    {
        $pasien = $this->pasienRepository->findWithoutFail($id);

        if (empty($pasien)) {
            Flash::error('Pasien not found');

            return redirect(route('pasiens.index'));
        }

        $pasien = $this->pasienRepository->update($request->all(), $id);

        Flash::success('Pasien updated successfully.');

        return redirect(route('pasiens.index'));
    }

    /**
     * Remove the specified Pasien from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pasien = $this->pasienRepository->findWithoutFail($id);

        if (empty($pasien)) {
            Flash::error('Pasien not found');

            return redirect(route('pasiens.index'));
        }

        $this->pasienRepository->delete($id);

        Flash::success('Pasien deleted successfully.');

        return redirect(route('pasiens.index'));
    }
}
