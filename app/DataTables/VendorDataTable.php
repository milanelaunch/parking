<?php

namespace App\DataTables;

use App\Models\Vendor;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class VendorDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($data) {
                $result = "";
                if ($data->name == "1") {
                    $result .= '<button type="button" class="btn btn-danger btn-sm changeStatusCategory" status="0" title="click to Inactivate User" category_id="' . $data->id . '"><i class="fa fa-unlock"></i></button> ';
                } else {
                    $result .= '<button type="button" class="btn btn-secondary btn-sm changeStatusCategory" status="1" title="click to Activate User" category_id="' . $data->id . '"><i class="fa fa-lock"></i></button> ';
                }
                $result .= '<a href="" class="btn btn-sm btn-info" title="view user"><i class="fa fa-eye"></i></a>
             <button type="button" id="cat_delete" class="btn btn-sm btn-danger" title="delete user" category_id="' . $data->id . '"><i class="fa fa-trash"></i></button> ';

                return $result;
            })

            ->rawColumns(['action'])
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Vendor $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Vendor $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('vendor-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('no')->data('DT_RowIndex')->searchable(false)->orderable(false),
            Column::make('id')->hidden(true),
            Column::make('name')->title('Name'),
            Column::make('email')->title('email'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Vendor_' . date('YmdHis');
    }
}
