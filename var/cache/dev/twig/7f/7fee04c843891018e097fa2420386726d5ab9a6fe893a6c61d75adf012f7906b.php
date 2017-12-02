<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_02d5be04ad7ae480ab6b82dc987260dc8126ca46ddc1e671ba2fdf1a24d3191d extends Twig_Template
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
        $__internal_724e558171a11feb1ce889744c7f6b956125f1720ec3097b2ec939e4ea88fe9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724e558171a11feb1ce889744c7f6b956125f1720ec3097b2ec939e4ea88fe9c->enter($__internal_724e558171a11feb1ce889744c7f6b956125f1720ec3097b2ec939e4ea88fe9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_958860b395b03bc1860f26e2d4b6a7e3cfeb835fa1dd4bb7afc063f9878c8992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958860b395b03bc1860f26e2d4b6a7e3cfeb835fa1dd4bb7afc063f9878c8992->enter($__internal_958860b395b03bc1860f26e2d4b6a7e3cfeb835fa1dd4bb7afc063f9878c8992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_724e558171a11feb1ce889744c7f6b956125f1720ec3097b2ec939e4ea88fe9c->leave($__internal_724e558171a11feb1ce889744c7f6b956125f1720ec3097b2ec939e4ea88fe9c_prof);

        
        $__internal_958860b395b03bc1860f26e2d4b6a7e3cfeb835fa1dd4bb7afc063f9878c8992->leave($__internal_958860b395b03bc1860f26e2d4b6a7e3cfeb835fa1dd4bb7afc063f9878c8992_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
