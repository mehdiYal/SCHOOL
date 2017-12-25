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
        $__internal_b91456d567322f9c5f368d29509dab1a726f530ee1446755c50c9d4984a3c02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91456d567322f9c5f368d29509dab1a726f530ee1446755c50c9d4984a3c02a->enter($__internal_b91456d567322f9c5f368d29509dab1a726f530ee1446755c50c9d4984a3c02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_868ff237edb9ea2f3068fc26aa1e291b49d910f378d1e6e3af2df081cd759528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868ff237edb9ea2f3068fc26aa1e291b49d910f378d1e6e3af2df081cd759528->enter($__internal_868ff237edb9ea2f3068fc26aa1e291b49d910f378d1e6e3af2df081cd759528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b91456d567322f9c5f368d29509dab1a726f530ee1446755c50c9d4984a3c02a->leave($__internal_b91456d567322f9c5f368d29509dab1a726f530ee1446755c50c9d4984a3c02a_prof);

        
        $__internal_868ff237edb9ea2f3068fc26aa1e291b49d910f378d1e6e3af2df081cd759528->leave($__internal_868ff237edb9ea2f3068fc26aa1e291b49d910f378d1e6e3af2df081cd759528_prof);

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
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
