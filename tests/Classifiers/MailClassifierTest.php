<?php

namespace Wnx\LaravelStats\Tests\Classifiers;

use Wnx\LaravelStats\Classifiers\MailClassifier;
use Wnx\LaravelStats\ReflectionClass;
use Wnx\LaravelStats\Tests\Stubs\Mails\DemoMail;
use Wnx\LaravelStats\Tests\TestCase;

class MailClassifierTest extends TestCase
{
    /** @test */
    public function it_returns_true_if_given_class_is_a_mailable()
    {
        $this->assertTrue(
            (new MailClassifier())->satisfies(
                new ReflectionClass(DemoMail::class)
            )
        );
    }
}
