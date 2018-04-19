
<style>
    td{
        
        line-height: 4.5;
    }


@page{
   size: 8.27in 11.69in;
/*size: A4 portrait;*/
         
}
body{
    margin: none;
    font-family: 'garamond';
    
    background-color: #fefefe;
    font-size: 10px;
        
}
.container{
    /*background-color: #EAE5F1;*/
   
    margin: none;
    
}
    .card{
        /*background-color: #EAE5F1;*/
        margin: none;
    }
    .logo{ width:100px;height:100px; text-align: left; }
    
    .td_logo{
        text-align: center;
        /*background-image:url("{{ url('public/img/sust-pdf.png')}}");
        width: 180px;
        height: 220px;
        background-position: center bottom, center top;
        background-repeat: no-repeat, repeat;*/
    }
    th{
        text-align: left;
    }
    .th{
        text-align: left;
        padding: 3px;
        font-size: 0.8em;
        font-weight: bold;
        font-family: 'Playfair Display', sans-serif;
        vertical-align: top;
		border: 1px solid black;
    }

    .td{
        text-align: left;
        padding: 3px;
        font-size: 0.8em;
        
        font-family: 'Playfair Display', sans-serif;
        vertical-align: top;  
		border: 1px solid black;		
    }
    .table{
        margin: 0 0 0 0; 
        border-collapse: collapse;
        width: 100%;
		border: 1px solid black;
		
        
    }
	table{table-layout: auto;}
	
	   
	
    .h1{
        font-size: 2.8em;
        text-align: center;
        font-family: 'Anton', sans-serif;
        margin: 0px 0px 0px 0px;
    }
    .h4{
        font-size: 1.8em;
        text-align: center;
        
        margin: 0px 0px 0px 0px;
    }
    .sign{
        font-family: 'Sacramento', cursive;
    }
    .member-photo{
		border: 1px solid #AAA;
		border-radius: 4px;
		padding: 3px;
		width:100px;
		height: 100px;
		box-shadow: 1px 1px 2px rgba(0,0,0,0.05);
		text-align: center;
    }   

</style>
    <div class="container">
        <table style="margin: 0 0 0 0; width: 100%;">
            <tr>
                <td style="width:150px;">
                    <img class="logo" src="{{ url('public/img/sust.png')}}" />
                </td>
                <td>
                    <h3 style="text-align: right; vertical-align: top; font-size: 12px;">Founder Members Meeting on 20-04-2018</h3>
                </td>
            </tr>
        </table>
        
        <div class="row">
            
            <div class="col-md-9">
            
                <div class="card" style="page-break-after: always;">
                    <div class="card-header"><h3 style="text-align:center">Department : {{ $departments[$dept] }}</h3></div>
                    <div class="card-body">
                        
                        <div class="table-responsive">
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th class="th" style="text-align: left">SL</th>
                                        <th class="th" style="text-align: left">Temporary Identification</th>
                                        
                                        <th class="th">Full Name</th>
                                        <th class="th">Batch(Session)</th>
                                        <th class="th" width="20%">Signature</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;?>
                                    @foreach($memberships as $m)
                                    <tr>
                                        <td class="td">{{ $i }}</td>
                                        <td class="td">{{ $m->membership_no }}</td>
                                        <td class="td">{{ ucwords(strtolower($m->fullname)) }}</td>
                                        <td class="td">{{ $batch[$m->sust_session] }}({{ $m->sust_session }}&nbsp;-&nbsp;<?php $s2 = $m->sust_session +1; ?>{{$s2}})</td>
                                        <td class="td">
                                            {{ ' ' }}

                                        </td>
                                    </tr>
                                    <?php $i=$i+1; ?>
                                    @endforeach
                               
                                </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
