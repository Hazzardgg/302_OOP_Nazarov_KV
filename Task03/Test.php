<?php

use App\Book;
use App\BookList;

function runTest()
{
    //Создаем первую Книгу и список кНиг
    $bl1 = new BookList(array());
    $b1 = new Book();
    $b1->setTitle("Капитанская дочка")
    ->setAuthors(array("А.С. Пушкин"))
    ->setPublisher("Азбука")
    ->setYear(2016);
    echo $b1 . PHP_EOL;

    //ДобАвляем первую книгу в спИсок
    $bl1->add($b1);
    echo "Количество книг в списке: " . $bl1->count() . PHP_EOL;

    //СоЗдаем втоРую книгу (с несколькими авторами)
    $b2 = new Book();
    $b2->setTitle("Двенадцать стульев")
    ->setAuthors(array("И.А. Ильф", "Е.П. Петров"))
    ->setPublisher("Эксмо")
    ->setYear(2022);
    echo $b2 . PHP_EOL;

    //ДобАвляем вторую книгу в спИсок
    $bl1->add($b2);
    echo "Количество книг в списке: " . $bl1->count() . PHP_EOL;

    //СеРиаЛизуем текущий список книг
    $bl1->store("Booklist.bin");

    //СОздаем третью книгу
    $b3 = new Book();
    $b3->setTitle("Дюна")
    ->setAuthors(array("Ф. Герберт"))
    ->setPublisher("АСТ")
    ->setYear(2022);
    echo $b3 . PHP_EOL;

    //ДобавЛяем третью книгу В список
    $bl1->add($b3);
    echo "Количество книг в списке: " . $bl1->count() . PHP_EOL;

    //Выводим первый список книг с помощью метода get()
    for ($i = 0; $i < $bl1->count(); $i++) {
        echo "\nBookList1" . $bl1->get($i) . PHP_EOL;
    }

    //Создаем второй список книг, пока что пустой
    $bl2 = new BookList(array());
    echo "Количество книг в списке: " . $bl2->count() . PHP_EOL;

    //Загружаем в него созраненный список и выводим его
    $bl2->load("Booklist.bin");
    echo "Количество книг в списке: " . $bl2->count() . PHP_EOL;
    for ($i = 0; $i < $bl2->count(); $i++) {
        echo "\nBooklist2" . $bl2->get($i) . PHP_EOL;
    }
}
