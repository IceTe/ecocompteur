<?php

namespace App\Http\Controllers;

use App\DataTables\compteursDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatecompteursRequest;
use App\Http\Requests\UpdatecompteursRequest;
use App\Repositories\compteursRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class compteursController extends AppBaseController
{
    /** @var  compteursRepository */
    private $compteursRepository;

    public function __construct(compteursRepository $compteursRepo)
    {
        $this->compteursRepository = $compteursRepo;
    }

    /**
     * Display a listing of the compteurs.
     *
     * @param compteursDataTable $compteursDataTable
     * @return Response
     */
    public function index(compteursDataTable $compteursDataTable)
    {
        return $compteursDataTable->render('compteurs.index');
    }

    /**
     * Show the form for creating a new compteurs.
     *
     * @return Response
     */
    public function create()
    {
        return view('compteurs.create');
    }

    /**
     * Store a newly created compteurs in storage.
     *
     * @param CreatecompteursRequest $request
     *
     * @return Response
     */
    public function store(CreatecompteursRequest $request)
    {
        $input = $request->all();

        $compteurs = $this->compteursRepository->create($input);

        Flash::success('Compteurs saved successfully.');

        return redirect(route('compteurs.index'));
    }

    /**
     * Display the specified compteurs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $compteurs = $this->compteursRepository->findWithoutFail($id);

        if (empty($compteurs)) {
            Flash::error('Compteurs not found');

            return redirect(route('compteurs.index'));
        }

        return view('compteurs.show')->with('compteurs', $compteurs);
    }

    /**
     * Show the form for editing the specified compteurs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $compteurs = $this->compteursRepository->findWithoutFail($id);

        if (empty($compteurs)) {
            Flash::error('Compteurs not found');

            return redirect(route('compteurs.index'));
        }

        return view('compteurs.edit')->with('compteurs', $compteurs);
    }

    /**
     * Update the specified compteurs in storage.
     *
     * @param  int              $id
     * @param UpdatecompteursRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecompteursRequest $request)
    {
        $compteurs = $this->compteursRepository->findWithoutFail($id);

        if (empty($compteurs)) {
            Flash::error('Compteurs not found');

            return redirect(route('compteurs.index'));
        }

        $compteurs = $this->compteursRepository->update($request->all(), $id);

        Flash::success('Compteurs updated successfully.');

        return redirect(route('compteurs.index'));
    }

    /**
     * Remove the specified compteurs from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $compteurs = $this->compteursRepository->findWithoutFail($id);

        if (empty($compteurs)) {
            Flash::error('Compteurs not found');

            return redirect(route('compteurs.index'));
        }

        $this->compteursRepository->delete($id);

        Flash::success('Compteurs deleted successfully.');

        return redirect(route('compteurs.index'));
    }
}
