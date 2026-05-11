<?php

use RotyPHP\Migration;


require __DIR__ . '/../vendor/autoload.php';

class Mig extends Migration
{
    public string $table = "users";

    public function columns()
    {
        // Inteiros
        $this->int('id')->primKey()->autoinc();
        $this->bigint("uuid");
        $this->int("age");
        // $this->tinyint("small_num"); // small_num TINYINT
        // $this->smallint("med_num"); // med_num SMALLINT
        // $this->mediumint("big_num"); // big_num MEDIUMINT

        // Strings
        $this->varchar("name", 255)->default("leal");
        $this->text("description")->default("your description here");
        // $this->char("code", 10); // code CHAR(10)

        // Decimais
        $this->float("price");
        // $this->double("precise_price"); // precise_price DOUBLE
        // $this->decimal("money", 10, 2); // money DECIMAL(10,2)

        // Booleanos
        $this->bool("active")->default(1);

        // Datas e Horas
        // $this->date("birth_date"); // birth_date DATE
        // $this->datetime("created_at"); // created_at DATETIME
        // $this->timestamp("updated_at"); // updated_at TIMESTAMP
        // $this->time("event_time"); // event_time TIME
        // $this->year("birth_year"); // birth_year YEAR

        // Binários
        // $this->binary("bin_data", 255); // bin_data BINARY(255)
        // $this->varbinary("var_bin", 255); // var_bin VARBINARY(255)
        // $this->blob("file_data"); // file_data BLOB
        // $this->tinyblob("small_file"); // small_file TINYBLOB
        // $this->mediumblob("med_file"); // med_file MEDIUMBLOB
        // $this->longblob("big_file"); // big_file LONGBLOB

        // Outros
        // $this->enum("status", ["active", "inactive"]); // status ENUM('active', 'inactive')
        // $this->set("tags", ["tag1", "tag2"]); // tags SET('tag1', 'tag2')
        // $this->json("metadata"); // metadata JSON
    }
}

$mig = new Mig();
$mig->columns();
// $mig->build("users");

print_r($mig->build());