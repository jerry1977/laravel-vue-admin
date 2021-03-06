<?php


namespace SmallRuralDog\Admin\Components;


use SmallRuralDog\Admin\Layout\Content;

/**
 * @deprecated 
 * Class Card
 * @package SmallRuralDog\Admin\Components
 */
class Card extends Component
{
    protected $componentName = "Card";
    protected $header;
    protected $bodyStyle;
    protected $shadow = "never";

    protected $content;

    public static function make()
    {
        return new Card();
    }

    /**
     * 设置 header 目前只支持String
     * @param string $header
     * @return $this
     */
    public function header(string $header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * 设置 body 的样式
     * @param array $bodyStyle
     * @return $this
     */
    public function bodyStyle($bodyStyle)
    {
        $this->bodyStyle = $bodyStyle;
        return $this;
    }

    /**
     * 设置阴影显示时机
     * always / hover / never
     * @param string $shadow
     * @return $this
     */
    public function shadow(string $shadow)
    {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * 设置内容组件
     * @param  $content
     * @return $this
     */
    public function content($content)
    {
        if ($content instanceof \Closure) {
            $c_content = new Content();
            call_user_func($content, $c_content);
            $this->content = $c_content;
        } else {
            $this->content = $content;
        }


        return $this;
    }


}
