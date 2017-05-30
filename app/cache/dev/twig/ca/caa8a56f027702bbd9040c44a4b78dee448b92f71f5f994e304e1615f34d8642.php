<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1767bb0cd681a9235de348cfb5b45161bd3e2342288dd9fc399a6531f49bff38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ae92bf48ce088f9aa65af037f3d6d7ad111602de0d7bb724284d7bc441e50bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae92bf48ce088f9aa65af037f3d6d7ad111602de0d7bb724284d7bc441e50bb->enter($__internal_1ae92bf48ce088f9aa65af037f3d6d7ad111602de0d7bb724284d7bc441e50bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ae92bf48ce088f9aa65af037f3d6d7ad111602de0d7bb724284d7bc441e50bb->leave($__internal_1ae92bf48ce088f9aa65af037f3d6d7ad111602de0d7bb724284d7bc441e50bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0abe3111531a3389ad4cef34df6846d7ea51663e4fd4d7eb971b5e2b30f66c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0abe3111531a3389ad4cef34df6846d7ea51663e4fd4d7eb971b5e2b30f66c26->enter($__internal_0abe3111531a3389ad4cef34df6846d7ea51663e4fd4d7eb971b5e2b30f66c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0abe3111531a3389ad4cef34df6846d7ea51663e4fd4d7eb971b5e2b30f66c26->leave($__internal_0abe3111531a3389ad4cef34df6846d7ea51663e4fd4d7eb971b5e2b30f66c26_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6120c59e6188103d116cc924ddaecd90408143d0d2e2515931818d5d44d7d276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6120c59e6188103d116cc924ddaecd90408143d0d2e2515931818d5d44d7d276->enter($__internal_6120c59e6188103d116cc924ddaecd90408143d0d2e2515931818d5d44d7d276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6120c59e6188103d116cc924ddaecd90408143d0d2e2515931818d5d44d7d276->leave($__internal_6120c59e6188103d116cc924ddaecd90408143d0d2e2515931818d5d44d7d276_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8fc26bfbca9331892f3b66911cb6f564391fcec9b35f6aec7b1aaffac79d6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fc26bfbca9331892f3b66911cb6f564391fcec9b35f6aec7b1aaffac79d6de->enter($__internal_e8fc26bfbca9331892f3b66911cb6f564391fcec9b35f6aec7b1aaffac79d6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e8fc26bfbca9331892f3b66911cb6f564391fcec9b35f6aec7b1aaffac79d6de->leave($__internal_e8fc26bfbca9331892f3b66911cb6f564391fcec9b35f6aec7b1aaffac79d6de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
