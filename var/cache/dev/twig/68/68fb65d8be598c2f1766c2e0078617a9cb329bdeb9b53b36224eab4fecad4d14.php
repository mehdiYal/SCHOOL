<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_216849063f6c3c177488ecb1b1cf8cb225c8259baf54cbae3a78fed9417c0852 extends Twig_Template
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
        $__internal_d0e13b5723c4616ed7a100fb005bc002ba67d99cadf061281a9b06ef10522182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e13b5723c4616ed7a100fb005bc002ba67d99cadf061281a9b06ef10522182->enter($__internal_d0e13b5723c4616ed7a100fb005bc002ba67d99cadf061281a9b06ef10522182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_dd2f88bbf8e72e6bc02eb85aeb11947fcd6593028cb806e1adca23effb4fbd99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2f88bbf8e72e6bc02eb85aeb11947fcd6593028cb806e1adca23effb4fbd99->enter($__internal_dd2f88bbf8e72e6bc02eb85aeb11947fcd6593028cb806e1adca23effb4fbd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d0e13b5723c4616ed7a100fb005bc002ba67d99cadf061281a9b06ef10522182->leave($__internal_d0e13b5723c4616ed7a100fb005bc002ba67d99cadf061281a9b06ef10522182_prof);

        
        $__internal_dd2f88bbf8e72e6bc02eb85aeb11947fcd6593028cb806e1adca23effb4fbd99->leave($__internal_dd2f88bbf8e72e6bc02eb85aeb11947fcd6593028cb806e1adca23effb4fbd99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
