<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

use App\Exports\EmployeeExport;
use Excel;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
        $employees = [
            ['name' => 'alice','email' => 'alice@gmail.com','phone' => '625457854','salary' => '200000','department' => 'accounting'],
            ['name' => 'audrew','email' => 'audrew@gmail.com','phone' => '658214578','salary' => '250000','department' => 'marketing'],
            ['name' => 'john','email' => 'john@gmail.com','phone' => '625496854','salary' => '350000','department' => 'quality'],
            ['name' => 'joshua','email' => 'joshua@gmail.com','phone' => '696457854', 'salary' => '400000','department' => 'accounting'],
        ];
        Employee::insert($employees);
        return "Record are inserted";
    }

    public function exportInToExcel()
    {
        return Excel::download(new EmployeeExport,'employees.xlsx');
    }

    public function exportInToCSV()
    {
        return Excel::download(new EmployeeExport,'employees.csv');
    }
}
