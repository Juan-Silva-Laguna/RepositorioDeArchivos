<?php
      if ($_POST['paso'] == 1) {
           $zip = new ZipArchive();
           $nom='../Controlador/'.$_POST['datos'][0]['nombreProyecto'].'.zip';
            $zip->open($nom,ZipArchive::CREATE);
            foreach ($_POST['datos'] as $dato) {
                  $zip->addFile($dato['url'], $dato['url']);
            }  
            $zip->close();
            
            header("Content-type: application/octet-stream");
            header("Content-disposition: attachment; filename=$nom");
            echo $nom;
      }
      else if ($_POST['paso'] == 2) {
            unlink($_POST['nombre']);
      }
?>