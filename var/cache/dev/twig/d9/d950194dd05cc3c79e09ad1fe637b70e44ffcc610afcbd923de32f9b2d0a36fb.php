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
        $__internal_fbea6041536d002634774abbf57c453b953136301620d1168d2c5cbce602deea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbea6041536d002634774abbf57c453b953136301620d1168d2c5cbce602deea->enter($__internal_fbea6041536d002634774abbf57c453b953136301620d1168d2c5cbce602deea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_2444bf06e0c4b51ec34f17157a1614d13a62f240fe44382e3678d1ac2d5282c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2444bf06e0c4b51ec34f17157a1614d13a62f240fe44382e3678d1ac2d5282c5->enter($__internal_2444bf06e0c4b51ec34f17157a1614d13a62f240fe44382e3678d1ac2d5282c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_fbea6041536d002634774abbf57c453b953136301620d1168d2c5cbce602deea->leave($__internal_fbea6041536d002634774abbf57c453b953136301620d1168d2c5cbce602deea_prof);

        
        $__internal_2444bf06e0c4b51ec34f17157a1614d13a62f240fe44382e3678d1ac2d5282c5->leave($__internal_2444bf06e0c4b51ec34f17157a1614d13a62f240fe44382e3678d1ac2d5282c5_prof);

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
