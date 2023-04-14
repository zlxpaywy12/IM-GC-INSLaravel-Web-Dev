@extends('layouts.master')
@section('title')
Halaman table
@endsection
@section('subtitle')
Halaman table
@endsection

@section('content')
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">#</th>
      <th>Task</th>
      <th>Progress</th>
      <th style="width: 40px">Label</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1.</td>
      <td>Update software</td>
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
        </div>
      </td>
      <td><span class="badge bg-danger">50%</span></td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Clean database</td>
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar bg-warning" style="width: 70%"></div>
        </div>
      </td>
      <td><span class="badge bg-warning">70%</span></td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Cron job running</td>
      <td>
        <div class="progress progress-xs progress-striped active">
          <div class="progress-bar bg-primary" style="width: 30%"></div>
        </div>
      </td>
      <td><span class="badge bg-primary">25%</span></td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Fix and squish bugs</td>
      <td>
        <div class="progress progress-xs progress-striped active">
          <div class="progress-bar bg-success" style="width: 90%"></div>
        </div>
      </td>
      <td><span class="badge bg-success">87%</span></td>
    </tr>
  </tbody>
</table>
<footer>
		<p>&copy; <a href=> @Habbilpermana.com</a>.2023 - 2024</p>
	</footer>
@endsection

