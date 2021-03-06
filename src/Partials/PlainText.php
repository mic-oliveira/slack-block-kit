<?php

declare(strict_types=1);

namespace Jeremeamia\Slack\BlockKit\Partials;

class PlainText extends Text
{
    /** @var bool */
    private $emoji;

    /**
     * @param string|null $text
     * @param bool $emoji
     */
    public function __construct(?string $text = null, bool $emoji = true)
    {
        if ($text !== null) {
            $this->text($text);
        }

        $this->emoji($emoji);
    }

    /**
     * @param bool $emoji
     * @return static
     */
    public function emoji(bool $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $data = parent::toArray();

        if ($this->emoji === false) {
            $data['emoji'] = $this->emoji;
        }

        return $data;
    }
}
