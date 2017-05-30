<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d8575e6d0835398d31fcfda4747780ce80c73eb592211fa9a54887f086b151d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d553b6c376c989cf82f742e69a5c7f0d40ab57390407482d1cef8c13ae48935a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d553b6c376c989cf82f742e69a5c7f0d40ab57390407482d1cef8c13ae48935a->enter($__internal_d553b6c376c989cf82f742e69a5c7f0d40ab57390407482d1cef8c13ae48935a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d553b6c376c989cf82f742e69a5c7f0d40ab57390407482d1cef8c13ae48935a->leave($__internal_d553b6c376c989cf82f742e69a5c7f0d40ab57390407482d1cef8c13ae48935a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b029fe0ec74df314af990e1814b67097f868d8f3b70d9c13c1d68a636cbdba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b029fe0ec74df314af990e1814b67097f868d8f3b70d9c13c1d68a636cbdba0->enter($__internal_9b029fe0ec74df314af990e1814b67097f868d8f3b70d9c13c1d68a636cbdba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9b029fe0ec74df314af990e1814b67097f868d8f3b70d9c13c1d68a636cbdba0->leave($__internal_9b029fe0ec74df314af990e1814b67097f868d8f3b70d9c13c1d68a636cbdba0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
