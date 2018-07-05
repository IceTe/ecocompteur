<?php

namespace App\Http\Controllers;

use App\DataTables\energiesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateenergiesRequest;
use App\Http\Requests\UpdateenergiesRequest;
use App\Repositories\energiesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class energiesController extends AppBaseController
{
    /** @var  energiesRepository */
    private $energiesRepository;

    public function __construct(energiesRepository $energiesRepo)
    {
        $this->energiesRepository = $energiesRepo;
    }

    /**
     * Display a listing of the energies.
     *
     * @param energiesDataTable $energiesDataTable
     * @return Response
     */
    public function index(energiesDataTable $energiesDataTable)
    {
        return $energiesDataTable->render('energies.index');
    }

    /**
     * Show the form for creating a new energies.
     *
     * @return Response
     */
    public function create()
    {
        return view('energies.create');
    }

    /**
     * Store a newly created energies in storage.
     *
     * @param CreateenergiesRequest $request
     *
     * @return Response
     */
    public function store(CreateenergiesRequest $request)
    {
        $input = $request->all();

        $energies = $this->energiesRepository->create($input);

        Flash::success('Energies saved successfully.');

        return redirect(route('energies.index'));
    }

    /**
     * Display the specified energies.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $energies = $this->energiesRepository->findWithoutFail($id);

        if (empty($energies)) {
            Flash::error('Energies not found');

            return redirect(route('energies.index'));
        }

        return view('energies.show')->with('energies', $energies);
    }

    /**
     * Show the form for editing the specified energies.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $energies = $this->energiesRepository->findWithoutFail($id);

        if (empty($energies)) {
            Flash::error('Energies not found');

            return redirect(route('energies.index'));
        }

        return view('energies.edit')->with('energies', $energies);
    }

    /**
     * Update the specified energies in storage.
     *
     * @param  int              $id
     * @param UpdateenergiesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateenergiesRequest $request)
    {
        $energies = $this->energiesRepository->findWithoutFail($id);

        if (empty($energies)) {
            Flash::error('Energies not found');

            return redirect(route('energies.index'));
        }

        $energies = $this->energiesRepository->update($request->all(), $id);

        Flash::success('Energies updated successfully.');

        return redirect(route('energies.index'));
    }

    /**
     * Remove the specified energies from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $energies = $this->energiesRepository->findWithoutFail($id);

        if (empty($energies)) {
            Flash::error('Energies not found');

            return redirect(route('energies.index'));
        }

        $this->energiesRepository->delete($id);

        Flash::success('Energies deleted successfully.');

        return redirect(route('energies.index'));
    }
}
