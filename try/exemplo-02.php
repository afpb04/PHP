<?php 

function trataNome($nome){

    if(!$nome){
        throw new Exception("Nenhum nome foi informado", 1);
        
    }
    echo ucfirst($nome). "<br/>";


}
try{
    trataNome("Joao");
    trataNome("");
}catch(Exception $e){
    
    echo $e->getMessage();

}finally{
    echo "executou o try!";
}

?>