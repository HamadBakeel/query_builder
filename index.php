<?php

    //=========================================================================================================
    // IMPORTANT: ALL THE METHODS ARE WELL TESTED AND WORKING PROPERLY
    // IF AN ERROR OCCURRED WHILE USING THEM, MAKE SURE YOU FOLLOW THE CORRECT SYNTAX MADE FOR THE METHODS
    //=========================================================================================================

    include "QueryBuilder.php";
    echo "<h1>Index page</h1>";
    $qb = new QueryBuilder();
    echo "<pre>";

    // TESTING THE METHODS
//    print_r($qb->select("*","employee")->runQuery());
//    print_r($qb->count("ProjectID","project")->runQuery());
//    print_r($qb->select("*","project","ProjectName = 'whatsapp clone'")->runQuery());
//    print_r($qb->update("project",array("ProjectName"),array("whatsapp_clone_2"),"ProjectName = \"whatsapp clone\"")->runQuery());
//    print_r($qb->select("*","project","ProjectName = 'whatsapp_clone_2'")->runQuery());
//    print_r($qb->insert("employee",array('EmpName','Age','Email','PhoneNO','Address'),array("\"Mark\"",29,"\"mark@gmail.com\"",88888,"\"Texa\""))->runQuery());
//    print_r($qb->select("*","employee")->limit(3,2)->runQuery());
//    print_r($qb->innerJoin("employee.EmpName, employee.EmpID, project.ProjectName","project","employee","employee.EmpID = project.EmpID")->runQuery());
//    print_r($qb->leftJoin("employee.EmpName, employee.EmpID, project.ProjectName","project","employee","employee.EmpID = project.EmpID")->runQuery());
//    print_r($qb->rightJoin("employee.EmpName, employee.EmpID, project.ProjectName","project","employee","employee.EmpID = project.EmpID")->runQuery());

