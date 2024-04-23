<?php

namespace Tests\Unit;

use App\Services\MainService;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_reverse_method_cat(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse('Cat'), 'Tac');
    }

    public function test_the_reverse_method_cyrrilic(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse('Мышь'), 'Ьшым');
    }

    public function test_the_reverse_method_upper_case(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse('houSe'), 'esuOh');
    }

    public function test_the_reverse_method_upper_case_cyrillic(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse('домИК'), 'кимОД');
    }

    public function test_the_reverse_method_upper_case_2(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse('elEpHant'), 'tnAhPele');
    }

    public function test_the_reverse_method_punctuation(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse('cat,'), 'tac,');
    }

    public function test_the_reverse_method_punctuation_cyrillic(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse('Зима.'), 'Амиз.');
    }

    public function test_the_reverse_method_punctuation_quotes(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse("is 'cold' now"), "si 'dloc' won");
    }

    public function test_the_reverse_method_punctuation_quotes_cyrillic(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse("это «Так» просто"), "отэ «Кат» отсорп");
    }
    public function test_the_reverse_method_punctuation_dash(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse("third-part"), "driht-trap");
    }
    public function test_the_reverse_method_punctuation_quote(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse("can't"), "nac't");
    }
    public function test_the_reverse_method_punctuation_hiragana(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse("こんにちは"), "はちにんこ");
    }
    public function test_the_reverse_method_punctuation_japan_hiragana_katakana_kanji_punct(): void
    {
        $mainService = new MainService();
        Assert::assertEquals($mainService->reverse("皆さんこんにちは、トウフグのコウイチでございます。ハロー！"), "はちにんこんさ皆、すまいざごでチイウコのグフウト。ーロハ！");
    }

}
