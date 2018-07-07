<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDaftar_pasienRequest;
use App\Http\Requests\UpdateDaftar_pasienRequest;
use App\Repositories\Daftar_pasienRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Daftar_pasienController extends AppBaseController
{
    /** @var  Daftar_pasienRepository */
    private $daftarPasienRepository;

    public function __construct(Daftar_pasienRepository $daftarPasienRepo)
    {
        $this->daftarPasienRepository = $daftarPasienRepo;
    }

    /**
     * Display a listing of the Daftar_pasien.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->daftarPasienRepository->pushCriteria(new RequestCriteria($request));
        $daftarPasiens = $this->daftarPasienRepository->all();

        return view('daftar_pasiens.index')
            ->with('daftarPasiens', $daftarPasiens);
    }

    /**
     * Show the form for creating a new Daftar_pasien.
     *
     * @return Response
     */
    public function create()
    {
        return view('daftar_pasiens.create');
    }

    /**
     * Store a newly created Daftar_pasien in storage.
     *
     * @param CreateDaftar_pasienRequest $request
     *
     * @return Response
     */
    public function store(CreateDaftar_pasienRequest $request)
    {
        $input = $request->all();

        $daftarPasien = $this->daftarPasienRepository->create($input);

        Flash::success('Daftar Pasien saved successfully.');

        return redirect(route('daftarPasiens.index'));
    }

    /**
     * Display the specified Daftar_pasien.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $daftarPasien = $this->daftarPasienRepository->findWithoutFail($id);

        if (empty($daftarPasien)) {
            Flash::error('Daftar Pasien not found');

            return redirect(route('daftarPasiens.index'));
        }

        return view('daftar_pasiens.show')->with('daftarPasien', $daftarPasien);
    }

    /**
     * Show the form for editing the specified Daftar_pasien.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $daftarPasien = $this->daftarPasienRepository->findWithoutFail($id);

        if (empty($daftarPasien)) {
            Flash::error('Daftar Pasien not found');

            return redirect(route('daftarPasiens.index'));
        }

        return view('daftar_pasiens.edit')->with('daftarPasien', $daftarPasien);
    }

    /**
     * Update the specified Daftar_pasien in storage.
     *
     * @param  int              $id
     * @param UpdateDaftar_pasienRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDaftar_pasienRequest $request)
    {
        $daftarPasien = $this->daftarPasienRepository->findWithoutFail($id);

        if (empty($daftarPasien)) {
            Flash::error('Daftar Pasien not found');

            return redirect(route('daftarPasiens.index'));
        }

        $daftarPasien = $this->daftarPasienRepository->update($request->all(), $id);

        Flash::success('Daftar Pasien updated successfully.');

        return redirect(route('daftarPasiens.index'));
    }

    /**
     * Remove the specified Daftar_pasien from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $daftarPasien = $this->daftarPasienRepository->findWithoutFail($id);

        if (empty($daftarPasien)) {
            Flash::error('Daftar Pasien not found');

            return redirect(route('daftarPasiens.index'));
        }

        $this->daftarPasienRepository->delete($id);

        Flash::success('Daftar Pasien deleted successfully.');

        return redirect(route('daftarPasiens.index'));
    }
}
