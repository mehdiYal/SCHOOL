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
        $__internal_df82950475f0295e408abbc9f78bb2d62a6c90cf8295085c18040046e0557049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df82950475f0295e408abbc9f78bb2d62a6c90cf8295085c18040046e0557049->enter($__internal_df82950475f0295e408abbc9f78bb2d62a6c90cf8295085c18040046e0557049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f824d09de4caf9956af6122125652865b2a5860b3702d31f5a8dbd2a38648672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f824d09de4caf9956af6122125652865b2a5860b3702d31f5a8dbd2a38648672->enter($__internal_f824d09de4caf9956af6122125652865b2a5860b3702d31f5a8dbd2a38648672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_df82950475f0295e408abbc9f78bb2d62a6c90cf8295085c18040046e0557049->leave($__internal_df82950475f0295e408abbc9f78bb2d62a6c90cf8295085c18040046e0557049_prof);

        
        $__internal_f824d09de4caf9956af6122125652865b2a5860b3702d31f5a8dbd2a38648672->leave($__internal_f824d09de4caf9956af6122125652865b2a5860b3702d31f5a8dbd2a38648672_prof);

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
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
