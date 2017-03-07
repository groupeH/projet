@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Déposer un document')

@section('content')
 <div id="row1" class="row">

        
        <!--<h2>@yield('nomPage')</h2> -->
        
        	<div class="form">
            	<div class="card blue-grey darken-1" >
            	<div class="card-content white-text grey darken-2" >
    {{ Form::open(array('url' => 'deposerdoc', 'files'=>'true', 'method' => 'post'))}}
	<div id="hautform"><label id="labeldep">Document à déposer : </label>	
	{{ Form::file('fichierdepot'), array( 'class'=> 'card-content white-text red accent-4')}}<br/><br/></div>
	
	<style type="text/css">
		
		#labeldep
		{
			font-size: large;	
			text-align: center;
		}
		#hautform
		{
			text-align: center;
		}
	
	</style>
	


	{{ Form::submit('Mettre en ligne', array('class' => 'waves-effect waves-light btn btn1')) }}
				
           
         
      
     
    {{ Form::close()}}
	
	
	</div>
	</div>
</div>


@endsection
