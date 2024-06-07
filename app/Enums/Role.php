<?php
namespace App\Enums;

enum Role: int
{
    case SuperAdministrator = 1;
    case Moderator = 2;
    case Legal_Manager = 3;
    case Auditor_Manager = 4;
    case Accountant_Manager = 5;
    case Consultant_Manager = 6;
    case Customer = 7;
}