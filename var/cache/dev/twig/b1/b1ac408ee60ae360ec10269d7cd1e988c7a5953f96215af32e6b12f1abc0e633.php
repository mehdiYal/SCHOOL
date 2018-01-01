<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_83949cc7ffcdd9fa2f00b4e6abc15329b50605fbc094ecf896119e8beaedfb2e extends Twig_Template
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
        $__internal_bcdb16d1d6a8c2fa926876f71260edd4eb9de249e359ca2de10904bd6cfb15df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcdb16d1d6a8c2fa926876f71260edd4eb9de249e359ca2de10904bd6cfb15df->enter($__internal_bcdb16d1d6a8c2fa926876f71260edd4eb9de249e359ca2de10904bd6cfb15df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_0a05b1772725cc6544dff204e118f5f94ad30e6b531edea4a499f5ccfc426a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a05b1772725cc6544dff204e118f5f94ad30e6b531edea4a499f5ccfc426a90->enter($__internal_0a05b1772725cc6544dff204e118f5f94ad30e6b531edea4a499f5ccfc426a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_bcdb16d1d6a8c2fa926876f71260edd4eb9de249e359ca2de10904bd6cfb15df->leave($__internal_bcdb16d1d6a8c2fa926876f71260edd4eb9de249e359ca2de10904bd6cfb15df_prof);

        
        $__internal_0a05b1772725cc6544dff204e118f5f94ad30e6b531edea4a499f5ccfc426a90->leave($__internal_0a05b1772725cc6544dff204e118f5f94ad30e6b531edea4a499f5ccfc426a90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
