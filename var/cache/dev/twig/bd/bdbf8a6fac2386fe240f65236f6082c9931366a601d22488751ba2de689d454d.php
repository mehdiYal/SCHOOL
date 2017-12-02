<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_20a2f64e57eeea4acebd06748a95eaf0728156a0f93f49c62d48371c0b1bbe75 extends Twig_Template
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
        $__internal_a605c8a360479499a887badb15094c38f37fc4983f064ab1d7dc2d238861026f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a605c8a360479499a887badb15094c38f37fc4983f064ab1d7dc2d238861026f->enter($__internal_a605c8a360479499a887badb15094c38f37fc4983f064ab1d7dc2d238861026f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2eadc2d09294d6197c405d506f9f35ead2ac5d6f4cca8268f5d389ab8219fbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eadc2d09294d6197c405d506f9f35ead2ac5d6f4cca8268f5d389ab8219fbcc->enter($__internal_2eadc2d09294d6197c405d506f9f35ead2ac5d6f4cca8268f5d389ab8219fbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a605c8a360479499a887badb15094c38f37fc4983f064ab1d7dc2d238861026f->leave($__internal_a605c8a360479499a887badb15094c38f37fc4983f064ab1d7dc2d238861026f_prof);

        
        $__internal_2eadc2d09294d6197c405d506f9f35ead2ac5d6f4cca8268f5d389ab8219fbcc->leave($__internal_2eadc2d09294d6197c405d506f9f35ead2ac5d6f4cca8268f5d389ab8219fbcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
