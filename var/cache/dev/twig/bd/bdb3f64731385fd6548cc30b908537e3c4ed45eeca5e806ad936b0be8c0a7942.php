<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_40cd430c664ec2a698c7b428b63a8a71eb1673fcadbbc2f297210694c6bd80fa extends Twig_Template
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
        $__internal_c176ea4989b00ff62314209389c946a32d32e4add5651d3da43722f80d46ea09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c176ea4989b00ff62314209389c946a32d32e4add5651d3da43722f80d46ea09->enter($__internal_c176ea4989b00ff62314209389c946a32d32e4add5651d3da43722f80d46ea09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_141ebf72620d8724a1854bfb4c787d939e487e4243fbba2239cf74ab8ffcd336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141ebf72620d8724a1854bfb4c787d939e487e4243fbba2239cf74ab8ffcd336->enter($__internal_141ebf72620d8724a1854bfb4c787d939e487e4243fbba2239cf74ab8ffcd336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c176ea4989b00ff62314209389c946a32d32e4add5651d3da43722f80d46ea09->leave($__internal_c176ea4989b00ff62314209389c946a32d32e4add5651d3da43722f80d46ea09_prof);

        
        $__internal_141ebf72620d8724a1854bfb4c787d939e487e4243fbba2239cf74ab8ffcd336->leave($__internal_141ebf72620d8724a1854bfb4c787d939e487e4243fbba2239cf74ab8ffcd336_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
