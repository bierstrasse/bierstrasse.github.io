// custom-plugin.js

function hideMetadata(hook, vm) {
    hook.beforeEach(function (content) {
      // Remove metadata from the content
      const withoutMetadata = content.replace(/---([\s\S]*?)---/, '');
      return withoutMetadata;
    });
  }
  
  // Register the plugin with Docsify
  window.$docsify.plugins = [hideMetadata].concat(window.$docsify.plugins || []);
  