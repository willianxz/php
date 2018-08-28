<?php
    function base64_to_jpeg( $base64_string, $output_file ) {
        $ifp = fopen( $output_file, "wb" ); 
        fwrite( $ifp, base64_decode( $base64_string) ); 
        fclose( $ifp ); 
        return( $output_file ); 
    }       
    $imagem = str_replace('data:image/png;base64,','',$_POST['imagem']);        
    base64_to_jpeg($imagem, "pasta1/foto1.png");        
    echo json_encode(array('imagem' => 1));