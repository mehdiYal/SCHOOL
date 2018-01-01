<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_216849063f6c3c177488ecb1b1cf8cb225c8259baf54cbae3a78fed9417c0852 extends Twig_Template
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
        $__internal_3710d0a2a7032d67bc4a023c4262e55272f1861e8d1027e1e8d2494fc376ce42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3710d0a2a7032d67bc4a023c4262e55272f1861e8d1027e1e8d2494fc376ce42->enter($__internal_3710d0a2a7032d67bc4a023c4262e55272f1861e8d1027e1e8d2494fc376ce42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c653aa6d6c1336c915aa60e9f39b49502cd4ceedc4388b1e5e059cb9818bf62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c653aa6d6c1336c915aa60e9f39b49502cd4ceedc4388b1e5e059cb9818bf62a->enter($__internal_c653aa6d6c1336c915aa60e9f39b49502cd4ceedc4388b1e5e059cb9818bf62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3710d0a2a7032d67bc4a023c4262e55272f1861e8d1027e1e8d2494fc376ce42->leave($__internal_3710d0a2a7032d67bc4a023c4262e55272f1861e8d1027e1e8d2494fc376ce42_prof);

        
        $__internal_c653aa6d6c1336c915aa60e9f39b49502cd4ceedc4388b1e5e059cb9818bf62a->leave($__internal_c653aa6d6c1336c915aa60e9f39b49502cd4ceedc4388b1e5e059cb9818bf62a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
