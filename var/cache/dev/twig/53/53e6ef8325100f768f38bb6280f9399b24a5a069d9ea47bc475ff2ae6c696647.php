<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_acc7316134b820037b92b44a97b535aea9835a582db67baa393984d414dca4e0 extends Twig_Template
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
        $__internal_2befdbe9d5c4a1d0e5be3dc4591ca1d4cbe00001cc3d956016327b5f67d85d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2befdbe9d5c4a1d0e5be3dc4591ca1d4cbe00001cc3d956016327b5f67d85d74->enter($__internal_2befdbe9d5c4a1d0e5be3dc4591ca1d4cbe00001cc3d956016327b5f67d85d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_53ae43df2e9c4ebf39014cbf1a01cbbf0af304049655be1a3c0d41dcebf30fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ae43df2e9c4ebf39014cbf1a01cbbf0af304049655be1a3c0d41dcebf30fe6->enter($__internal_53ae43df2e9c4ebf39014cbf1a01cbbf0af304049655be1a3c0d41dcebf30fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2befdbe9d5c4a1d0e5be3dc4591ca1d4cbe00001cc3d956016327b5f67d85d74->leave($__internal_2befdbe9d5c4a1d0e5be3dc4591ca1d4cbe00001cc3d956016327b5f67d85d74_prof);

        
        $__internal_53ae43df2e9c4ebf39014cbf1a01cbbf0af304049655be1a3c0d41dcebf30fe6->leave($__internal_53ae43df2e9c4ebf39014cbf1a01cbbf0af304049655be1a3c0d41dcebf30fe6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
