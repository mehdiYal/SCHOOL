<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_5135c26846ca872f12f1fcf96c57d86b280075bfef7d3ae24b491f3d2ebace14 extends Twig_Template
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
        $__internal_bdcb37ccf5a519cb235590591b9b1128cb5ab638b2676b595cb3899e90172dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdcb37ccf5a519cb235590591b9b1128cb5ab638b2676b595cb3899e90172dad->enter($__internal_bdcb37ccf5a519cb235590591b9b1128cb5ab638b2676b595cb3899e90172dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_48fc3cb7d12c73b513030767a49ca7bbccbb015a312a492c87d619c8cb1b64f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fc3cb7d12c73b513030767a49ca7bbccbb015a312a492c87d619c8cb1b64f4->enter($__internal_48fc3cb7d12c73b513030767a49ca7bbccbb015a312a492c87d619c8cb1b64f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_bdcb37ccf5a519cb235590591b9b1128cb5ab638b2676b595cb3899e90172dad->leave($__internal_bdcb37ccf5a519cb235590591b9b1128cb5ab638b2676b595cb3899e90172dad_prof);

        
        $__internal_48fc3cb7d12c73b513030767a49ca7bbccbb015a312a492c87d619c8cb1b64f4->leave($__internal_48fc3cb7d12c73b513030767a49ca7bbccbb015a312a492c87d619c8cb1b64f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
