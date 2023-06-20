<?php

declare(strict_types=1);

namespace Codelicia\XulietaSql;

use Codelicia\Xulieta\ValueObject\SampleCode;
use Codelicia\Xulieta\ValueObject\Violation;
use PhpMyAdmin\SqlParser\Lexer;
use PhpMyAdmin\SqlParser\Parser;
use PhpMyAdmin\SqlParser\Utils\Error;

use function in_array;

final class Validator implements \Codelicia\Xulieta\Validator\Validator
{
    public function supports(SampleCode $sampleCode): bool
    {
        return in_array($sampleCode->language(), ['sql', 'mysql', 'postgresql'], false);
    }

    public function hasViolation(SampleCode $sampleCode): bool
    {
        return $this->getErrors($sampleCode) !== [];
    }

    public function getViolation(SampleCode $sampleCode): Violation
    {
        $errors = $this->getErrors($sampleCode);

        [$message, $line, $token, $position] = $errors[0];

        return new Violation($sampleCode, $message . ' ' . $token, $line + 1, self::class);
    }

    /** @return array<int, array<string, int|string>> */
    private function getErrors(SampleCode $sampleCode): array
    {
        $lexer  = new Lexer($sampleCode->code());
        $parser = new Parser($lexer->list);

        return Error::get([$lexer, $parser]);
    }
}
