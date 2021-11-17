<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentinformationsRequest;
use App\Http\Requests\UpdateStudentinformationsRequest;
use App\Repositories\StudentinformationsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StudentinformationsController extends AppBaseController
{
    /** @var  StudentinformationsRepository */
    private $studentinformationsRepository;

    public function __construct(StudentinformationsRepository $studentinformationsRepo)
    {
        $this->studentinformationsRepository = $studentinformationsRepo;
    }

    /**
     * Display a listing of the Studentinformations.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $studentinformations = $this->studentinformationsRepository->all();

        return view('studentinformations.index')
            ->with('studentinformations', $studentinformations);
    }

    /**
     * Show the form for creating a new Studentinformations.
     *
     * @return Response
     */
    public function create()
    {
        return view('studentinformations.create');
    }

    /**
     * Store a newly created Studentinformations in storage.
     *
     * @param CreateStudentinformationsRequest $request
     *
     * @return Response
     */
    public function store(CreateStudentinformationsRequest $request)
    {
        $input = $request->all();

        $studentinformations = $this->studentinformationsRepository->create($input);

        Flash::success('Studentinformations saved successfully.');

        return redirect(route('studentinformations.index'));
    }

    /**
     * Display the specified Studentinformations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $studentinformations = $this->studentinformationsRepository->find($id);

        if (empty($studentinformations)) {
            Flash::error('Studentinformations not found');

            return redirect(route('studentinformations.index'));
        }

        return view('studentinformations.show')->with('studentinformations', $studentinformations);
    }

    /**
     * Show the form for editing the specified Studentinformations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $studentinformations = $this->studentinformationsRepository->find($id);

        if (empty($studentinformations)) {
            Flash::error('Studentinformations not found');

            return redirect(route('studentinformations.index'));
        }

        return view('studentinformations.edit')->with('studentinformations', $studentinformations);
    }

    /**
     * Update the specified Studentinformations in storage.
     *
     * @param int $id
     * @param UpdateStudentinformationsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStudentinformationsRequest $request)
    {
        $studentinformations = $this->studentinformationsRepository->find($id);

        if (empty($studentinformations)) {
            Flash::error('Studentinformations not found');

            return redirect(route('studentinformations.index'));
        }

        $studentinformations = $this->studentinformationsRepository->update($request->all(), $id);

        Flash::success('Studentinformations updated successfully.');

        return redirect(route('studentinformations.index'));
    }

    /**
     * Remove the specified Studentinformations from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $studentinformations = $this->studentinformationsRepository->find($id);

        if (empty($studentinformations)) {
            Flash::error('Studentinformations not found');

            return redirect(route('studentinformations.index'));
        }

        $this->studentinformationsRepository->delete($id);

        Flash::success('Studentinformations deleted successfully.');

        return redirect(route('studentinformations.index'));
    }
}
