<?php
$datafile = file_get_contents('val.txt');
$path = 'val.txt';

$arr = ['one'=>0,'two'=>0,"three"=>0,
        'four'=>0,'five'=>0,"six"=>0,
        'seven'=>0,'eight'=>0,"nine"=>0];

if($_POST){
    $count = 0;

    foreach ($arr as $key => $item){
            if ($_POST['name']=='test'){
                echo "-";
                file_put_contents($path, '0000000001');
                break;
           }
        if ($_POST['name'] == $key){

            if (((($datafile[0]==1 && $datafile[1]==1 && $datafile[2]==1) ||
                    ($datafile[3]==1 && $datafile[4]==1 && $datafile[5]==1)||
                    ($datafile[6]==1 && $datafile[7]==1 && $datafile[8]==1)||
                    ($datafile[0]==1 && $datafile[4]==1 && $datafile[8]==1)||
                    ($datafile[2]==1 && $datafile[4]==1 && $datafile[6]==1)||
                    ($datafile[0]==1 && $datafile[3]==1 && $datafile[6]==1)||
                    ($datafile[1]==1 && $datafile[4]==1 && $datafile[7]==1)||
                    ($datafile[2]==1 && $datafile[5]==1 && $datafile[8]==1)))){
                echo "X WIN!";

                file_put_contents($path, '0000000001');
            }
            elseif (((($datafile[0]==2 && $datafile[1]==2 && $datafile[2]==2) ||
                ($datafile[3]==2 && $datafile[4]==2 && $datafile[5]==2)||
                ($datafile[6]==2 && $datafile[7]==2 && $datafile[8]==2)||
                ($datafile[0]==2 && $datafile[4]==2 && $datafile[8]==2)||
                ($datafile[2]==2 && $datafile[4]==2 && $datafile[6]==2)||
                ($datafile[0]==2 && $datafile[3]==2 && $datafile[6]==2)||
                ($datafile[1]==2 && $datafile[4]==2 && $datafile[7]==2)||
                ($datafile[2]==2 && $datafile[5]==2 && $datafile[8]==2)))){
                echo "0 WIN!";

                file_put_contents($path, '0000000001');
            }

            else{
                if ($datafile[9]==1 && $datafile[$count]==0){
                    $datafile[$count]=1;
                    $datafile[9]=0;
                    file_put_contents($path,$datafile);

                    echo "X";

                }
                elseif($datafile[9]==0 && $datafile[$count]==0){
                    $datafile[$count]=2;

                    $datafile[9]=1;
                    file_put_contents($path,$datafile);
                    echo "0";

                }
                else{
                    if($datafile[$count]==1){
                        echo "X";
                    }
                    elseif ($datafile[$count]==2){
                        echo "0";
                    }

                }



            }



        }
        $count+=1;
    }


}