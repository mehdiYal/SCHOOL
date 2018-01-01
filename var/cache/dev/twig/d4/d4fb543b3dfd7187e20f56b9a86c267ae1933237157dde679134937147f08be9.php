<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4d1cbbf6268775013ae2254d9bdacf255c5c8af0e10e699b9495eb0355ded038 extends Twig_Template
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
        $__internal_aacb2a2fff7a838ecc513286fb5d113e267e6715b718cbf70a5aea4a95fc71a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacb2a2fff7a838ecc513286fb5d113e267e6715b718cbf70a5aea4a95fc71a7->enter($__internal_aacb2a2fff7a838ecc513286fb5d113e267e6715b718cbf70a5aea4a95fc71a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_01103b89c7dcad3fbe47162b57dda60c269c9bf34309b241d2ca75566dffe19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01103b89c7dcad3fbe47162b57dda60c269c9bf34309b241d2ca75566dffe19b->enter($__internal_01103b89c7dcad3fbe47162b57dda60c269c9bf34309b241d2ca75566dffe19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_aacb2a2fff7a838ecc513286fb5d113e267e6715b718cbf70a5aea4a95fc71a7->leave($__internal_aacb2a2fff7a838ecc513286fb5d113e267e6715b718cbf70a5aea4a95fc71a7_prof);

        
        $__internal_01103b89c7dcad3fbe47162b57dda60c269c9bf34309b241d2ca75566dffe19b->leave($__internal_01103b89c7dcad3fbe47162b57dda60c269c9bf34309b241d2ca75566dffe19b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
