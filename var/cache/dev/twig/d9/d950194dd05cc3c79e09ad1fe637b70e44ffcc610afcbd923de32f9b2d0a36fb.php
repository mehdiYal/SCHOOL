<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5004cb565433c79d95bbdae67130f635a8268ac5d7b92c75e40e6403b37a1f0e extends Twig_Template
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
        $__internal_582d50f4bc32f844a6bc0751d146b4a20dbe59ab877f6471ee1847cd9531a621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582d50f4bc32f844a6bc0751d146b4a20dbe59ab877f6471ee1847cd9531a621->enter($__internal_582d50f4bc32f844a6bc0751d146b4a20dbe59ab877f6471ee1847cd9531a621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a7102686b224a8a9e8d6bdb63938bfad678455346256cefe17ac7adc9a7c1dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7102686b224a8a9e8d6bdb63938bfad678455346256cefe17ac7adc9a7c1dfa->enter($__internal_a7102686b224a8a9e8d6bdb63938bfad678455346256cefe17ac7adc9a7c1dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_582d50f4bc32f844a6bc0751d146b4a20dbe59ab877f6471ee1847cd9531a621->leave($__internal_582d50f4bc32f844a6bc0751d146b4a20dbe59ab877f6471ee1847cd9531a621_prof);

        
        $__internal_a7102686b224a8a9e8d6bdb63938bfad678455346256cefe17ac7adc9a7c1dfa->leave($__internal_a7102686b224a8a9e8d6bdb63938bfad678455346256cefe17ac7adc9a7c1dfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
