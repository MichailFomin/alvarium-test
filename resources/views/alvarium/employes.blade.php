@extends('alvarium.app')

@section('content')

   <div class="row">
      <div class="col-6">
         <label>Количество на странице</label>
         <select name="sort_by" onchange="location = this.value">
            <option value="{{ route('employes.show', ['paginate' => 10]) }}" @if (Request::__get('paginate') == 10) selected @endif>10</option>
            <option value="{{ route('employes.show', ['paginate' => 25]) }}" @if (Request::__get('paginate') == 25) selected @endif>25</option>
            <option value="{{ route('employes.show', ['paginate' => 50]) }}" @if (Request::__get('paginate') == 50) selected @endif>50</option>
            <option value="{{ route('employes.show', ['paginate' => 100]) }}" @if (Request::__get('paginate') == 100
            ) selected @endif>100</option>
         </select>
      </div>

      <div class="col-6">
         <label>Выбрать отдел</label>
         <select name="dep" onchange="location = this.value">
            @foreach($departments as $department)
               <option value="{{ route('department.show', ['id' => $department->id]) }}" @if (Request::__get('id') == $department->id) selected @endif >{{ $department->department_name }}</option>
            @endforeach
         </select>
      </div>
      <table class="table">
         <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">ФИО</th>
            <th scope="col">Дата рождения</th>
            <th scope="col">Отдел</th>
            <th scope="col">Должность</th>
            <th scope="col">Тип сотрудника</th>
            <th scope="col">Оплата за месяц</th>
         </tr>
         </thead>
         <tbody>
         @foreach($workers as $worker)
            <tr>
               <th scope="row">{{ $loop->index + 1 }}</th>
               <td>{{ $worker->second_name }} {{ $worker->first_name }} {{ $worker->patronymic }}</td>
               <td>{{ $worker->birthday }}</td>
               <td>{{ $worker->department->department_name }}</td>
               <td>{{ $worker->position->position_name }}</td>
               <td>{{ $worker->typeOfPayment->type_name }}</td>
               <td>
                  @if ($worker->typeOfPayment->id == 2){{ $worker->position->rate }}@elseif($worker->summary != 0){{ $worker->rate * $worker->summary }} @else 0 @endif
               </td>
            </tr>
         @endforeach
         </tbody>
      </table>
   </div>

@endsection

@section('pagination')

   {{ $workers->links() }}

@endsection
