<?php


class Tlist
{
    protected array $data = [];
    protected string $num = "";
    protected string $tagName = "";

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param string $num
     * @return Tlist
     */
    public function setNum(string $num): static
    {
        $this->num = $num;
        return $this;
    }

    /**
     * @param string $tagName
     * @return Tlist
     */
    public function setTagName(string $tagName): static
    {
        $this->tagName = $tagName;
        return $this;
    }

    public function html(): string
    {
        $html = '';
        foreach ($this->data as $value) {
            $html .= "\t<li>$value</li>\n";
        }

        return "<$this->tagName type='$this->num'>\n$html</$this->tagName>\n";
    }
}