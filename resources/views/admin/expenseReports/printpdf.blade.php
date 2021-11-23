<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <title>{{ trans('cruds.expenseReport.title') }}</title>

    <style>
        body {
            background-color: white;
        }
    </style>
  </head>
  <body>
    <h3 class="page-title">{{ trans('cruds.expenseReport.reports.title') }}</h3>
    <hr>
        <div class="col align-self-start">
            <table class="table table-bordered table-striped table-fixed">
                <tr>
                    <th>{{ trans('cruds.expenseReport.reports.income') }}</th>
                    <td>{{ number_format($incomesTotal, 2) }}</td>
                </tr>
                <tr>
                    <th>{{ trans('cruds.expenseReport.reports.expense') }}</th>
                    <td>{{ number_format($expensesTotal, 2) }}</td>
                </tr>
                <tr>
                    <th>{{ trans('cruds.expenseReport.reports.profit') }}</th>
                    <td>{{ number_format($profit, 2) }}</td>
                </tr>
            </table>
        </div>
        <div class="col align-self-center">
            <table class="table table-bordered table-striped table-fixed">
                <tr>
                    <th>{{ trans('cruds.expenseReport.reports.incomeByCategory') }}</th>
                    <th>{{ number_format($incomesTotal, 2) }}</th>
                </tr>
                @foreach($incomesSummary as $inc)
                    <tr>
                        <th>{{ $inc['name'] }}</th>
                        <td>{{ number_format($inc['amount'], 2) }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col align-self-end">
            <table class="table table-bordered table-striped table-fixed">
                <tr>
                    <th>{{ trans('cruds.expenseReport.reports.expenseByCategory') }}</th>
                    <th>{{ number_format($expensesTotal, 2) }}</th>
                </tr>
                @foreach($expensesSummary as $inc)
                    <tr>
                        <th>{{ $inc['name'] }}</th>
                        <td>{{ number_format($inc['amount'], 2) }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
  </body>
</html>