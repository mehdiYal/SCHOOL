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
        $__internal_34233cfc46b8a5b8704837d0be6da9a8aea36b0d6b0efd17ef7ae3d4e8dae72d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34233cfc46b8a5b8704837d0be6da9a8aea36b0d6b0efd17ef7ae3d4e8dae72d->enter($__internal_34233cfc46b8a5b8704837d0be6da9a8aea36b0d6b0efd17ef7ae3d4e8dae72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7d0c2b30d6af0e5abeacf800f5b92fc84fe9bf7f20c575586920c4e0349b4f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0c2b30d6af0e5abeacf800f5b92fc84fe9bf7f20c575586920c4e0349b4f65->enter($__internal_7d0c2b30d6af0e5abeacf800f5b92fc84fe9bf7f20c575586920c4e0349b4f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_34233cfc46b8a5b8704837d0be6da9a8aea36b0d6b0efd17ef7ae3d4e8dae72d->leave($__internal_34233cfc46b8a5b8704837d0be6da9a8aea36b0d6b0efd17ef7ae3d4e8dae72d_prof);

        
        $__internal_7d0c2b30d6af0e5abeacf800f5b92fc84fe9bf7f20c575586920c4e0349b4f65->leave($__internal_7d0c2b30d6af0e5abeacf800f5b92fc84fe9bf7f20c575586920c4e0349b4f65_prof);

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
