@extends('layouts.app')

@section('template_title')
    Uf
@endsection

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Uf') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ufs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Hours</th>
										<th>Modul Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ufs as $uf)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $uf->name }}</td>
											<td>{{ $uf->hours }}</td>
											<td>{{ $uf->modul_id }}</td>

                                            <td>
                                                <form action="{{ route('ufs.destroy',$uf->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ufs.show',$uf->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ufs.edit',$uf->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ufs->links() !!}
            </div>
        </div>
    </div>
@endsection
