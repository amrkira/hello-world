@extends('layouts.AdminLayouts.DesignAdmin')
@section('content')





 <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Logowania</h4>
                  <p class="card-description">
                    Wykaz 100 ostatnich logowań
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            LP
                          </th>
                          <th>
                            Login
                          </th>
                          <th>
                            Data Logowania
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($logs as $log)
                        <tr>
                          <td>
                            {{$log->id}}
                          </td>
                          <td>
                            {{$log->user->name}}
                          </td>
                          
                          <td>
                            {{$log->created_at}}
                          </td>
                        </tr>
                       @endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection