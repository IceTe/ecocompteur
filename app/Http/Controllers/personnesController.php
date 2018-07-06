<?php

namespace App\Http\Controllers;

use App\DataTables\personnesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatepersonnesRequest;
use App\Http\Requests\UpdatepersonnesRequest;
use App\Repositories\personnesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;

use Response;

class personnesController extends AppBaseController
{
    /** @var  personnesRepository */
    private $personnesRepository;

    public function __construct(personnesRepository $personnesRepo)
    {
        $this->personnesRepository = $personnesRepo;
    }

    /**
     * Display a listing of the personnes.
     *
     * @param personnesDataTable $personnesDataTable
     * @return Response
     */
    public function index(personnesDataTable $personnesDataTable)
    {
        
        return $personnesDataTable->render('personnes.index');
    }

    /**
     * Show the form for creating a new personnes.
     *
     * @return Response
     */
    public function create()
    {var_dump();exit();
        return view('personnes.create');
    }

    /**
     * Store a newly created personnes in storage.
     *
     * @param CreatepersonnesRequest $request
     *
     * @return Response
     */
    public function store(CreatepersonnesRequest $request)
    {
        $input = $request->all();

        $personnes = $this->personnesRepository->create($input);

        Flash::success('Personnes saved successfully.');

        return redirect(route('personnes.index'));
    }

    /**
     * Display the specified personnes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personnes = $this->personnesRepository->findWithoutFail($id);

        if (empty($personnes)) {
            Flash::error('Personnes not found');

            return redirect(route('personnes.index'));
        }

        return view('personnes.show')->with('personnes', $personnes);
    }

    /**
     * Show the form for editing the specified personnes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personnes = $this->personnesRepository->findWithoutFail($id);
            
        if (empty($personnes)) {
            Flash::error('Personnes not found');

            return redirect(route('personnes.index'));
        }

        return view('personnes.edit')->with('personnes', $personnes);
    }

    /**
     * Update the specified personnes in storage.
     *
     * @param  int              $id
     * @param UpdatepersonnesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepersonnesRequest $request)
    {
        $personnes = $this->personnesRepository->findWithoutFail($id);

        if (empty($personnes)) {
            Flash::error('Personnes not found');

            return redirect(route('personnes.index'));
        }

        $personnes = $this->personnesRepository->update($request->all(), $id);

        Flash::success('Personnes updated successfully.');

        return redirect(route('personnes.index'));
    }

    /**
     * Remove the specified personnes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personnes = $this->personnesRepository->findWithoutFail($id);

        if (empty($personnes)) {
            Flash::error('Personnes not found');

            return redirect(route('personnes.index'));
        }

        $this->personnesRepository->delete($id);

        Flash::success('Personnes deleted successfully.');

        return redirect(route('personnes.index'));
    }
}
