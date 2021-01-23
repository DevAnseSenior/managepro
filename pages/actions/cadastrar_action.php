<?php
    require '../../config.php';

    $name = filter_input(INPUT_POST, 'name');
    $startdate = filter_input(INPUT_POST, 'startDate');
    $enddate = filter_input(INPUT_POST, 'endDate');
    $value = filter_input(INPUT_POST, 'valueProj');
    $risk = filter_input(INPUT_POST, 'risk');
    $contributors = filter_input(INPUT_POST, 'contributors');

    if($name) {
        $sql = $pdo->prepare("SELECT * FROM projects WHERE name = :name");
        $sql->bindValue(':name', $name);
        $sql->execute();


        if($sql->rowCount() === 0) {
            $sql = $pdo->prepare("INSERT INTO projects (name, sttDate, endDate, valueP, risk, contributors) VALUES (:name, :startDate, :endDate, :valueProj, :risk, :contributors)");

            $sql->bindValue(':name', $name);
            $sql->bindValue(':startDate', $startdate);
            $sql->bindValue(':endDate', $enddate);
            $sql->bindValue(':valueProj', $value);
            $sql->bindValue(':risk', $risk);
            $sql->bindValue(':contributors', $contributors);
            $sql->execute();

            header("Location:../../index.php");
            exit;
        } else {
            header("Location:../projetos.php");
            exit;
        }
    } else {
        header("Location:../cadastrar.php");
        exit;
    }
?>