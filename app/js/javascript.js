$(document).ready(function () {
    $('.table-datatables').DataTable();

    let url_fragment = window.location.href;
    url_fragment = url_fragment.split('#');

    url_fragment = url_fragment[1];

    if(url_fragment === 'erro'){
    	$('#retorno_erro').show();

    	setTimeout(function(){ 
    		$('#retorno_erro').fadeOut();
    	}, 3000);
    }else if(url_fragment === 'sucesso'){
    	$('#retorno_sucesso').show();

    	setTimeout(function(){ 
    		$('#retorno_sucesso').fadeOut();
    	}, 3000);
    }

    location.hash = '';
});