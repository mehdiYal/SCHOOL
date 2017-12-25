<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0e1054df78f2d71a072a56dbeee37fb2553c64f277ca85008c2a86bc0f94e82d extends Twig_Template
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
        $__internal_3dedb2c92a2eefeaa0e5f073fe64931e5dd000c4e0c8d17245b96e1151e4d6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dedb2c92a2eefeaa0e5f073fe64931e5dd000c4e0c8d17245b96e1151e4d6e7->enter($__internal_3dedb2c92a2eefeaa0e5f073fe64931e5dd000c4e0c8d17245b96e1151e4d6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d9291ac42cf576c286111ec91cd736b6eb1d688a724dbdfe459a4465fe4f2c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9291ac42cf576c286111ec91cd736b6eb1d688a724dbdfe459a4465fe4f2c9b->enter($__internal_d9291ac42cf576c286111ec91cd736b6eb1d688a724dbdfe459a4465fe4f2c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3dedb2c92a2eefeaa0e5f073fe64931e5dd000c4e0c8d17245b96e1151e4d6e7->leave($__internal_3dedb2c92a2eefeaa0e5f073fe64931e5dd000c4e0c8d17245b96e1151e4d6e7_prof);

        
        $__internal_d9291ac42cf576c286111ec91cd736b6eb1d688a724dbdfe459a4465fe4f2c9b->leave($__internal_d9291ac42cf576c286111ec91cd736b6eb1d688a724dbdfe459a4465fe4f2c9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
