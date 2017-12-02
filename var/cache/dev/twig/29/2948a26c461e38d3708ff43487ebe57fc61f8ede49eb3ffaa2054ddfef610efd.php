<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_929b1f5f65d74d69705044939fc22f41bd5df932f9be3fc2894ee0666866eeaa extends Twig_Template
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
        $__internal_7713d7a3aa0e1b893695de7275e3fce7a64fe3cf8748a46021a712dcf47151d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7713d7a3aa0e1b893695de7275e3fce7a64fe3cf8748a46021a712dcf47151d9->enter($__internal_7713d7a3aa0e1b893695de7275e3fce7a64fe3cf8748a46021a712dcf47151d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_8daea9b099af02f70bda2522d74ca0216d20b468f0c4252b40686a2372efe2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8daea9b099af02f70bda2522d74ca0216d20b468f0c4252b40686a2372efe2d6->enter($__internal_8daea9b099af02f70bda2522d74ca0216d20b468f0c4252b40686a2372efe2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7713d7a3aa0e1b893695de7275e3fce7a64fe3cf8748a46021a712dcf47151d9->leave($__internal_7713d7a3aa0e1b893695de7275e3fce7a64fe3cf8748a46021a712dcf47151d9_prof);

        
        $__internal_8daea9b099af02f70bda2522d74ca0216d20b468f0c4252b40686a2372efe2d6->leave($__internal_8daea9b099af02f70bda2522d74ca0216d20b468f0c4252b40686a2372efe2d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
