<?php

namespace App\Http\Controllers;

use App\DataTables\transactionsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatetransactionsRequest;
use App\Http\Requests\UpdatetransactionsRequest;
use App\Repositories\transactionsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class transactionsController extends AppBaseController
{
    /** @var  transactionsRepository */
    private $transactionsRepository;

    public function __construct(transactionsRepository $transactionsRepo)
    {
        $this->transactionsRepository = $transactionsRepo;
    }

    /**
     * Display a listing of the transactions.
     *
     * @param transactionsDataTable $transactionsDataTable
     * @return Response
     */
    public function index(transactionsDataTable $transactionsDataTable)
    {
        return $transactionsDataTable->render('transactions.index');
    }

    /**
     * Show the form for creating a new transactions.
     *
     * @return Response
     */
    public function create()
    {
        return view('transactions.create');
    }

    /**
     * Store a newly created transactions in storage.
     *
     * @param CreatetransactionsRequest $request
     *
     * @return Response
     */
    public function store(CreatetransactionsRequest $request)
    {
        $input = $request->all();

        $transactions = $this->transactionsRepository->create($input);

        Flash::success('Transactions saved successfully.');

        return redirect(route('transactions.index'));
    }

    /**
     * Display the specified transactions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transactions = $this->transactionsRepository->findWithoutFail($id);

        if (empty($transactions)) {
            Flash::error('Transactions not found');

            return redirect(route('transactions.index'));
        }

        return view('transactions.show')->with('transactions', $transactions);
    }

    /**
     * Show the form for editing the specified transactions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transactions = $this->transactionsRepository->findWithoutFail($id);

        if (empty($transactions)) {
            Flash::error('Transactions not found');

            return redirect(route('transactions.index'));
        }

        return view('transactions.edit')->with('transactions', $transactions);
    }

    /**
     * Update the specified transactions in storage.
     *
     * @param  int              $id
     * @param UpdatetransactionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetransactionsRequest $request)
    {
        $transactions = $this->transactionsRepository->findWithoutFail($id);

        if (empty($transactions)) {
            Flash::error('Transactions not found');

            return redirect(route('transactions.index'));
        }

        $transactions = $this->transactionsRepository->update($request->all(), $id);

        Flash::success('Transactions updated successfully.');

        return redirect(route('transactions.index'));
    }

    /**
     * Remove the specified transactions from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transactions = $this->transactionsRepository->findWithoutFail($id);

        if (empty($transactions)) {
            Flash::error('Transactions not found');

            return redirect(route('transactions.index'));
        }

        $this->transactionsRepository->delete($id);

        Flash::success('Transactions deleted successfully.');

        return redirect(route('transactions.index'));
    }
}
