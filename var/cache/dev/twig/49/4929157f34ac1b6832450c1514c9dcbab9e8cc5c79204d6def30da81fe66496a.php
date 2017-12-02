<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7cfbe0a4f24069a03a1cc9155454a34bf83ecbb17d3979acc6625d7fb8070744 extends Twig_Template
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
        $__internal_c4de6ace781b419b412291852931c293e096a91cc393b5394f2be59a40ef45c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4de6ace781b419b412291852931c293e096a91cc393b5394f2be59a40ef45c9->enter($__internal_c4de6ace781b419b412291852931c293e096a91cc393b5394f2be59a40ef45c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_cf125b07f21871ebe4228565c3a023be0f12bfa964b4c4c8d3ad7a320dd53d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf125b07f21871ebe4228565c3a023be0f12bfa964b4c4c8d3ad7a320dd53d06->enter($__internal_cf125b07f21871ebe4228565c3a023be0f12bfa964b4c4c8d3ad7a320dd53d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c4de6ace781b419b412291852931c293e096a91cc393b5394f2be59a40ef45c9->leave($__internal_c4de6ace781b419b412291852931c293e096a91cc393b5394f2be59a40ef45c9_prof);

        
        $__internal_cf125b07f21871ebe4228565c3a023be0f12bfa964b4c4c8d3ad7a320dd53d06->leave($__internal_cf125b07f21871ebe4228565c3a023be0f12bfa964b4c4c8d3ad7a320dd53d06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
