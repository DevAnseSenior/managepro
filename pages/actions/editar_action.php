<?php
    require '../../config.php';

    $id = filter_input(INPUT_POST, 'id');
    $name = filter_input(INPUT_POST, 'name');
    $startdate = filter_input(INPUT_POST, 'startDate');
    $enddate = filter_input(INPUT_POST, 'endDate');
    $value = filter_input(INPUT_POST, 'valueProj');
    $risk = filter_input(INPUT_POST, 'risk');
    $contributors = filter_input(INPUT_POST, 'contributors');

    if($id) {
        $sql = $pdo->prepare("UPDATE projects SET name = :name, sttDate = :startDate, endDate = :endDate, valueP = :valueProj, risk = :risk, contributors = :contributors WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':startDate', $startdate);
        $sql->bindValue(':endDate', $enddate);
        $sql->bindValue(':valueProj', $value);
        $sql->bindValue(':risk', $risk);
        $sql->bindValue(':contributors', $contributors);
        $sql->execute();

        header("Location:../projetos.php");
        exit;
    } else {
        header("Location:../cadastrar.php");
        exit;
    }
?>

<html>
    <?php
        echo '$vl';
    ?>
</html>