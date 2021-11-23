<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBudgetCategoryRequest;
use App\Http\Requests\StoreBudgetCategoryRequest;
use App\Http\Requests\UpdateBudgetCategoryRequest;
use App\Models\BudgetCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BudgetCategoriesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('budget_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $budgetCategories = BudgetCategory::with(['created_by'])->get();

        return view('admin.budgetCategories.index', compact('budgetCategories'));
    }

    public function create()
    {
        abort_if(Gate::denies('budget_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.budgetCategories.create');
    }

    public function store(StoreBudgetCategoryRequest $request)
    {
        $budgetCategory = BudgetCategory::create($request->all());

        return redirect()->route('admin.budget-categories.index');
    }

    public function edit(BudgetCategory $budgetCategory)
    {
        abort_if(Gate::denies('budget_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $budgetCategory->load('created_by');

        return view('admin.budgetCategories.edit', compact('budgetCategory'));
    }

    public function update(UpdateBudgetCategoryRequest $request, BudgetCategory $budgetCategory)
    {
        $budgetCategory->update($request->all());

        return redirect()->route('admin.budget-categories.index');
    }

    public function show(BudgetCategory $budgetCategory)
    {
        abort_if(Gate::denies('budget_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $budgetCategory->load('created_by');

        return view('admin.budgetCategories.show', compact('budgetCategory'));
    }

    public function destroy(BudgetCategory $budgetCategory)
    {
        abort_if(Gate::denies('budget_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $budgetCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyBudgetCategoryRequest $request)
    {
        BudgetCategory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
