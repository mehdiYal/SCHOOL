<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_afc2fd7444c256f6aac8a74fd37eea45978427dff1074053a7726aafcfe8637f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f42801a35dbbdd5afa56e253ef6269bf6e7051ff944d745c8261ef575b25068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f42801a35dbbdd5afa56e253ef6269bf6e7051ff944d745c8261ef575b25068->enter($__internal_9f42801a35dbbdd5afa56e253ef6269bf6e7051ff944d745c8261ef575b25068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b83a773593fc3db7c79ba81bd3de8799f3301739a052a258b1ed488ab90b2515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83a773593fc3db7c79ba81bd3de8799f3301739a052a258b1ed488ab90b2515->enter($__internal_b83a773593fc3db7c79ba81bd3de8799f3301739a052a258b1ed488ab90b2515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9f42801a35dbbdd5afa56e253ef6269bf6e7051ff944d745c8261ef575b25068->leave($__internal_9f42801a35dbbdd5afa56e253ef6269bf6e7051ff944d745c8261ef575b25068_prof);

        
        $__internal_b83a773593fc3db7c79ba81bd3de8799f3301739a052a258b1ed488ab90b2515->leave($__internal_b83a773593fc3db7c79ba81bd3de8799f3301739a052a258b1ed488ab90b2515_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
